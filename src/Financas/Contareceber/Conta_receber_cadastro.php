<?php

namespace OmieLib\Financas\Contareceber;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contareceber\Request\LcrListarRequest;
use OmieLib\Financas\Contareceber\Response\LcrListarResponse;

/**
 * Cadastro de contas a receber.
 *
 * @pw_element integer $codigo_lancamento_omie Chave do Lançamento
 * @pw_element string $codigo_lancamento_integracao Código do lançamento gerado pelo integrador.
 * @pw_element integer $codigo_cliente_fornecedor Código de Cliente / Fornecedor
 * @pw_element string $codigo_cliente_fornecedor_integracao Código do cliente informado pelo integrador.
 * @pw_element string $data_vencimento Data de Vencimento
 * @pw_element decimal $valor_documento Valor do Lançamento
 * @pw_element string $codigo_categoria Código da Categoria
 * @pw_element string $data_previsao Data de Previsão de Pagamento/Recebimento
 * @pw_element categoriasArray $categorias Rateio de Categoria
 * @pw_element integer $id_conta_corrente Id da Conta Corrente
 * @pw_element string $numero_documento Número do Documento
 * @pw_element string $numero_parcela Número da parcela "Formatada" como 999/999
 * @pw_element string $codigo_tipo_documento Código para o Tipo de Documento
 * @pw_element string $numero_documento_fiscal Número do Documento Fiscal
 * @pw_element string $numero_pedido Número do Pedido
 * @pw_element string $chave_nfe Chave de Acesso da NFE
 * @pw_element string $observacao Observação da Baixa do Contas a Receber.
 * @pw_element string $codigo_barras_ficha_compensacao Código de Barras da Ficha de Compensação
 * @pw_element string $codigo_cmc7_cheque Código CMC7 do Cheque
 * @pw_element string $data_emissao Data de Emissão
 * @pw_element string $id_origem Código da Origem.<BR>Preenchimento automático - Não informar.<BR><BR>Informação localizada na Aba "Diversos" do Contas a Receber.<BR><BR>Os valores disponíveis são:<BR><BR>"APIR" - Integração de Conta a Receber                     <BR>"BARR" - Conta a Receber Importada por Código de Barras    <BR>"CTER" - Parcela a Receber de um CT-e                      <BR>"DEVR" - Conta a Receber da Devolução ao Fornecedor        <BR>"MANR" - Lançamento Manual de Conta a Receber              <BR>"NFER" - Conta a Receber Importada de uma NF-e             <BR>"RPTR" - Repetição de Contas a Receber                     <BR>"VENR" - Parcela a Receber de Vendas                       <BR>"XMLR" - Conta a Receber Importada de um arquivo XML
 * @pw_element string $operacao Operação
 * @pw_element decimal $valor_pis Valor do PIS
 * @pw_element string $retem_pis Indica que o Valor do PIS informado deve ser retido
 * @pw_element decimal $valor_cofins Valor do COFINS
 * @pw_element string $retem_cofins Indica que o Valor do COFINS informado deve ser retido
 * @pw_element decimal $valor_csll Valor do CSLL
 * @pw_element string $retem_csll Indica que o Valor do CSLL informado deve ser retido
 * @pw_element decimal $valor_ir Valor do Imposto de Renda
 * @pw_element string $retem_ir Indica que o Valor do Imposto de Renda  informado deve ser retido
 * @pw_element decimal $valor_iss Valor do ISS
 * @pw_element string $retem_iss Indica que o Valor do ISS informado deve ser retido
 * @pw_element decimal $valor_inss Valor do INSS
 * @pw_element string $retem_inss Indica que o Valor do INSS informado deve ser retido
 * @pw_element string $bloqueado Bloquear lançamento (S/N)
 * @pw_element string $bloquear_baixa bloquear a baixa do lançamento
 * @pw_element string $importado_api Importado pela API (S/N).
 * @pw_element string $baixar_documento Efetua a baixa automática do documento.
 * @pw_element string $conciliar_documento Efetua a conciliação do documento automaticamente.
 * @pw_element string $acao A-Adiciona Valor / S-Subtrai valor / L-Lança valor.
 * @pw_element lancamento_detalheArray $lancamento_detalhe Detalhes do lançamento
 * @pw_element distribuicaoArray $distribuicao Distribuição por Departamentos
 * @pw_element string $status_titulo Status do Título
 * @pw_element integer $codigo_vendedor Código do Vendedor
 * @pw_element integer $codigo_projeto Código do Projeto
 * @pw_element string $nsu Número Sequencial Único - Comprovante de pagamento.
 * @pw_element string $data_registro Data de Registro
 * @pw_element string $tipo_agrupamento Tipo de agrupamento dos lançamentos.<BR><BR>Pode ser:<BR>C-Consolidado (sintético).<BR>I-Individual (analítico).<BR><BR>Não deve ser preenchido na Inclusão/alteração pois é de preenchimento automático para lançamentos recebidos do PDV.<BR><BR><BR>
 * @pw_element info $info Informações complemetares.
 * @pw_element boleto $boleto Informações do boleto.
 * @pw_element integer $nCodPedido ID do Pedido de Venda. <BR><BR>Preenchimento opcional.<BR><BR>Quando informado na inclusão do título associa o documento a um Pedido de Venda já existente no Omie.
 * @pw_element string $bloquear_exclusao Postergar data de vencimento.<BR><BR>Indica que a data de vencimento será postergada aos Sábados, Domingos e Feriados Nacionais.<BR><BR>Preencher com "S" ou "N".<BR><BR>Preencher com "S" somente umas das tags:<BR>antecipar<BR>postergar<BR><BR>Preenchimento opcional.
 * @pw_element integer $nCodOS ID da Ordem de Serviço.<BR><BR>Quando informado na inclusão do título, preenche o campo numero_pedido para a conta a receber.<BR><BR>Obs. O campo nCodOS não é alterado internamente.
 * @pw_element string $cPedidoCliente Número do pedido do cliente.<BR><BR>Preenchimento Opcional.
 * @pw_element string $cNumeroContrato Número do contrato do cliente.<BR><BR>Preenchimento Opcional.
 * @pw_element recebimento $recebimento Detalhes do recebimento (baixa).<BR>Informe aqui os detalhes do recebimento do lançamento.<BR><BR>Ao preencher esse campo é possível detalhar informações da baixa do documento, como: Valor Recebido, Desconto, Juros, Multa, etc.<BR>   <BR>Quando essa tag estiver preenchida é obrigatório o preenchimento da tag "baixar_documento" com "S" <BR><BR>Caso essa tag não seja preenchida o lançamento será baixado de forma integral de acordo com os valores do lançamento.<BR><BR>Essa tag é utilizada apenas nos métodos de Inclusão e Alteração.<BR><BR>Informação localizada na Aba "Recebimentos" no cadastro do lançamento.<BR><BR>Preenchimento opcional.
 * @pw_element repeticao $repeticao Repetição do lançamento.  <BR><BR>Utilize essa estrutura para cadastrar várias parcela na mesma requisição.<BR>Escolha entre as tags "mensal", "semanal" ou "especifico" para definir as datas de vencimento e quantidade de parcelas.<BR><BR>Informação localizada na Aba "Repetição" do cadastro do título.<BR><BR>Essa tag é utilizada apenas nos métodos de Inclusão e Alteração.<BR><BR>Preenchimento opcional.
 * @pw_element string $aprendizado_rateio Aprendizado de rateio de departamento.<BR><BR>Preencher com "S" ou "N".<BR><BR>Default "N"<BR><BR>Quando essa tag for preenchida com "S" será assumido o rateio de departamento para a categoria informada na tag "codigo_categoria".<BR><BR>Essa tag é utilizada apenas nos métodos de inclusão e alteração.
 * @pw_complex conta_receber_cadastro
 */
class Conta_receber_cadastro{
	/**
	 * Chave do Lançamento
	 *
	 * @var integer
	 */
	public int $codigo_lancamento_omie;
	/**
	 * Código do lançamento gerado pelo integrador.
	 *
	 * @var string
	 */
	public string $codigo_lancamento_integracao;
	/**
	 * Código de Cliente / Fornecedor
	 *
	 * @var integer
	 */
	public int $codigo_cliente_fornecedor;
	/**
	 * Código do cliente informado pelo integrador.
	 *
	 * @var string
	 */
	public string $codigo_cliente_fornecedor_integracao;
	/**
	 * Data de Vencimento
	 *
	 * @var string
	 */
	public string $data_vencimento;
	/**
	 * Valor do Lançamento
	 *
	 * @var decimal
	 */
	public float $valor_documento;
	/**
	 * Código da Categoria
	 *
	 * @var string
	 */
	public string $codigo_categoria;
	/**
	 * Data de Previsão de Pagamento/Recebimento
	 *
	 * @var string
	 */
	public string $data_previsao;
	/**
	 * Rateio de Categoria
	 *
	 * @var Categorias[]
	 */
	public array $categorias;
	/**
	 * Id da Conta Corrente
	 *
	 * @var integer
	 */
	public int $id_conta_corrente;
	/**
	 * Número do Documento
	 *
	 * @var string
	 */
	public string $numero_documento;
	/**
	 * Número da parcela "Formatada" como 999/999
	 *
	 * @var string
	 */
	public string $numero_parcela;
	/**
	 * Código para o Tipo de Documento
	 *
	 * @var string
	 */
	public string $codigo_tipo_documento;
	/**
	 * Número do Documento Fiscal
	 *
	 * @var string
	 */
	public string $numero_documento_fiscal;
	/**
	 * Número do Pedido
	 *
	 * @var string
	 */
	public string $numero_pedido;
	/**
	 * Chave de Acesso da NFE
	 *
	 * @var string
	 */
	public string $chave_nfe;
	/**
	 * Observação da Baixa do Contas a Receber.
	 *
	 * @var string
	 */
	public string $observacao;
	/**
	 * Código de Barras da Ficha de Compensação
	 *
	 * @var string
	 */
	public string $codigo_barras_ficha_compensacao;
	/**
	 * Código CMC7 do Cheque
	 *
	 * @var string
	 */
	public string $codigo_cmc7_cheque;
	/**
	 * Data de Emissão
	 *
	 * @var string
	 */
	public string $data_emissao;
	/**
	 * Código da Origem.<BR>Preenchimento automático - Não informar.<BR><BR>Informação localizada na Aba "Diversos" do Contas a Receber.<BR><BR>Os valores disponíveis são:<BR><BR>"APIR" - Integração de Conta a Receber                     <BR>"BARR" - Conta a Receber Importada por Código de Barras    <BR>"CTER" - Parcela a Receber de um CT-e                      <BR>"DEVR" - Conta a Receber da Devolução ao Fornecedor        <BR>"MANR" - Lançamento Manual de Conta a Receber              <BR>"NFER" - Conta a Receber Importada de uma NF-e             <BR>"RPTR" - Repetição de Contas a Receber                     <BR>"VENR" - Parcela a Receber de Vendas                       <BR>"XMLR" - Conta a Receber Importada de um arquivo XML
	 *
	 * @var string
	 */
	public string $id_origem;
	/**
	 * Operação
	 *
	 * @var string
	 */
	public string $operacao;
	/**
	 * Valor do PIS
	 *
	 * @var decimal
	 */
	public float $valor_pis;
	/**
	 * Indica que o Valor do PIS informado deve ser retido
	 *
	 * @var string
	 */
	public string $retem_pis;
	/**
	 * Valor do COFINS
	 *
	 * @var decimal
	 */
	public float $valor_cofins;
	/**
	 * Indica que o Valor do COFINS informado deve ser retido
	 *
	 * @var string
	 */
	public string $retem_cofins;
	/**
	 * Valor do CSLL
	 *
	 * @var decimal
	 */
	public float $valor_csll;
	/**
	 * Indica que o Valor do CSLL informado deve ser retido
	 *
	 * @var string
	 */
	public string $retem_csll;
	/**
	 * Valor do Imposto de Renda
	 *
	 * @var decimal
	 */
	public float $valor_ir;
	/**
	 * Indica que o Valor do Imposto de Renda  informado deve ser retido
	 *
	 * @var string
	 */
	public string $retem_ir;
	/**
	 * Valor do ISS
	 *
	 * @var decimal
	 */
	public float $valor_iss;
	/**
	 * Indica que o Valor do ISS informado deve ser retido
	 *
	 * @var string
	 */
	public string $retem_iss;
	/**
	 * Valor do INSS
	 *
	 * @var decimal
	 */
	public float $valor_inss;
	/**
	 * Indica que o Valor do INSS informado deve ser retido
	 *
	 * @var string
	 */
	public string $retem_inss;
	/**
	 * Bloquear lançamento (S/N)
	 *
	 * @var string
	 */
	public string $bloqueado;
	/**
	 * bloquear a baixa do lançamento
	 *
	 * @var string
	 */
	public string $bloquear_baixa;
	/**
	 * Importado pela API (S/N).
	 *
	 * @var string
	 */
	public string $importado_api;
	/**
	 * Efetua a baixa automática do documento.
	 *
	 * @var string
	 */
	public string $baixar_documento;
	/**
	 * Efetua a conciliação do documento automaticamente.
	 *
	 * @var string
	 */
	public string $conciliar_documento;
	/**
	 * A-Adiciona Valor / S-Subtrai valor / L-Lança valor.
	 *
	 * @var string
	 */
	public string $acao;
	/**
	 * Detalhes do lançamento
	 *
	 * @var Lancamento_detalhe[]
	 */
	public array $lancamento_detalhe;
	/**
	 * Distribuição por Departamentos
	 *
	 * @var Distribuicao[]
	 */
	public array $distribuicao;
	/**
	 * Status do Título
	 *
	 * @var string
	 */
	public string $status_titulo;
	/**
	 * Código do Vendedor
	 *
	 * @var integer
	 */
	public int $codigo_vendedor;
	/**
	 * Código do Projeto
	 *
	 * @var integer
	 */
	public int $codigo_projeto;
	/**
	 * Número Sequencial Único - Comprovante de pagamento.
	 *
	 * @var string
	 */
	public string $nsu;
	/**
	 * Data de Registro
	 *
	 * @var string
	 */
	public string $data_registro;
	/**
	 * Tipo de agrupamento dos lançamentos.<BR><BR>Pode ser:<BR>C-Consolidado (sintético).<BR>I-Individual (analítico).<BR><BR>Não deve ser preenchido na Inclusão/alteração pois é de preenchimento automático para lançamentos recebidos do PDV.<BR><BR><BR>
	 *
	 * @var string
	 */
	public string $tipo_agrupamento;
	/**
	 * Informações complemetares.
	 *
	 * @var Info
	 */
	public Info $info;
	/**
	 * Informações do boleto.
	 *
	 * @var Boleto
	 */
	public Boleto $boleto;
	/**
	 * ID do Pedido de Venda. <BR><BR>Preenchimento opcional.<BR><BR>Quando informado na inclusão do título associa o documento a um Pedido de Venda já existente no Omie.
	 *
	 * @var integer
	 */
	public int $nCodPedido;
	/**
	 * Postergar data de vencimento.<BR><BR>Indica que a data de vencimento será postergada aos Sábados, Domingos e Feriados Nacionais.<BR><BR>Preencher com "S" ou "N".<BR><BR>Preencher com "S" somente umas das tags:<BR>antecipar<BR>postergar<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $bloquear_exclusao;
	/**
	 * ID da Ordem de Serviço.<BR><BR>Quando informado na inclusão do título, preenche o campo numero_pedido para a conta a receber.<BR><BR>Obs. O campo nCodOS não é alterado internamente.
	 *
	 * @var integer
	 */
	public int $nCodOS;
	/**
	 * Número do pedido do cliente.<BR><BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public string $cPedidoCliente;
	/**
	 * Número do contrato do cliente.<BR><BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public string $cNumeroContrato;
	/**
	 * Detalhes do recebimento (baixa).<BR>Informe aqui os detalhes do recebimento do lançamento.<BR><BR>Ao preencher esse campo é possível detalhar informações da baixa do documento, como: Valor Recebido, Desconto, Juros, Multa, etc.<BR>   <BR>Quando essa tag estiver preenchida é obrigatório o preenchimento da tag "baixar_documento" com "S" <BR><BR>Caso essa tag não seja preenchida o lançamento será baixado de forma integral de acordo com os valores do lançamento.<BR><BR>Essa tag é utilizada apenas nos métodos de Inclusão e Alteração.<BR><BR>Informação localizada na Aba "Recebimentos" no cadastro do lançamento.<BR><BR>Preenchimento opcional.
	 *
	 * @var Recebimento
	 */
	public Recebimento $recebimento;
	/**
	 * Repetição do lançamento.  <BR><BR>Utilize essa estrutura para cadastrar várias parcela na mesma requisição.<BR>Escolha entre as tags "mensal", "semanal" ou "especifico" para definir as datas de vencimento e quantidade de parcelas.<BR><BR>Informação localizada na Aba "Repetição" do cadastro do título.<BR><BR>Essa tag é utilizada apenas nos métodos de Inclusão e Alteração.<BR><BR>Preenchimento opcional.
	 *
	 * @var Repeticao
	 */
	public Repeticao $repeticao;
	/**
	 * Aprendizado de rateio de departamento.<BR><BR>Preencher com "S" ou "N".<BR><BR>Default "N"<BR><BR>Quando essa tag for preenchida com "S" será assumido o rateio de departamento para a categoria informada na tag "codigo_categoria".<BR><BR>Essa tag é utilizada apenas nos métodos de inclusão e alteração.
	 *
	 * @var string
	 */
	public string $aprendizado_rateio;
}
