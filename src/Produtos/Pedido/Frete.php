<?php

namespace OmieLib\Produtos\Pedido;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Pedido\Request\PvpAlterarPedFatRequest;
use OmieLib\Produtos\Pedido\Request\PvpConsultarRequest;
use OmieLib\Produtos\Pedido\Request\PvpDevolverRequest;
use OmieLib\Produtos\Pedido\Request\PvpExcluirRequest;
use OmieLib\Produtos\Pedido\Request\PvpListarRequest;
use OmieLib\Produtos\Pedido\Request\PvpSimularImpRequest;
use OmieLib\Produtos\Pedido\Request\PvpStatusRequest;
use OmieLib\Produtos\Pedido\Request\PvpTrocarEtapaRequest;
use OmieLib\Produtos\Pedido\Response\PvpAlterarPedFatResponse;
use OmieLib\Produtos\Pedido\Response\PvpConsultarResponse;
use OmieLib\Produtos\Pedido\Response\PvpDevolverResponse;
use OmieLib\Produtos\Pedido\Response\PvpExcluirResponse;
use OmieLib\Produtos\Pedido\Response\PvpListarResponse;
use OmieLib\Produtos\Pedido\Response\PvpSimularImpResponse;
use OmieLib\Produtos\Pedido\Response\PvpStatusResponse;
use OmieLib\Produtos\Pedido\Response\PvpTrocarEtapaResponse;

/**
 * Dados da Aba "Frete e Outras Despesas" do Pedido de Venda.
 *
 * @pw_element integer $codigo_transportadora ID da transportadora.<BR>Preenchimento Opcional.<BR><BR>Esse campo não é exibido na tela do Pedido de Vendas. <BR>É uma informação interna, utilizada apenas nas APIs.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.<BR><BR>Utilize a tag "codigo_cliente_omie" do método "ListarClientes" da API<BR>http://app.omie.com.br/api/v1/geral/clientes/<BR>para obter essa informação.<BR><BR>OBS: O Omie uitliza o cadastro de clientes para registrar também fornecedores e transportadoras.<BR>
 * @pw_element string $codigo_transportadora_integracao Código Integração da Transportadora.<BR>Preenchimento Opcional.<BR><BR>Esse campo deve ser informado apenas se você incluiu o cliente (transportadora) via API e informou um código de integração para o cliente. Do contrário, informe sempre a tag "codigo_cliente".<BR>
 * @pw_element string $modalidade Tipo de  Frete.<BR>Preenchimento Obrigatório.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.<BR><BR>Valores disponíveis:<BR><BR>"0" - Contratação do Frete por conta do Remetente (CIF)<BR>"1" - Contratação do Frete por conta do Destinatário (FOB)<BR>"2" - Contratação do Frete por conta de Terceiros<BR>"3" - Transporte Próprio por conta do Remetente<BR>"4" - Transporte Próprio por conta do Destinatário<BR>"9" - Sem frete.<BR>
 * @pw_element string $placa Placa do Veículo.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
 * @pw_element string $placa_estado Estado da Placa do Veículo.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
 * @pw_element string $registro_transportador RNTRC (ANTT) - Registro Nacional de Transportador de Cargas.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
 * @pw_element integer $quantidade_volumes Quantidade de Volumes.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
 * @pw_element string $especie_volumes Espécie dos Volumes.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
 * @pw_element string $marca_volumes Marca dos Volumes.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
 * @pw_element string $numeracao_volumes Numeração dos Volumes.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
 * @pw_element decimal $peso_liquido Peso Líquido (Kg).<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
 * @pw_element decimal $peso_bruto Peso Bruto (Kg).<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
 * @pw_element decimal $valor_frete Valor do Frete.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
 * @pw_element decimal $valor_seguro Valor do Seguro.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
 * @pw_element string $numero_lacre Número do Lacre.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
 * @pw_element decimal $outras_despesas Outras Despesas Acessórias.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
 * @pw_element string $veiculo_proprio O transporte será realizado com veículo próprio.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
 * @pw_element string $previsao_entrega Previsão de entrega do Pedido de Venda<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
 * @pw_element string $codigo_rastreio Código de Rastreio da Entrega do Pedido de Venda.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
 * @pw_element icms_retido $icms_retido Dados do ICMS Retido do Serviço de Transporte.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
 * @pw_element integer $codigo_tipo_entrega Código do tipo de entrega
 * @pw_element string $link_rastreio Link de Rastreio da Entrega do Pedido de Venda.<BR>Preenchimento disponível apenas para o método AlterarPedFaturado.<BR><BR>Informação interna pode ser visualizada e consultada via API '/api/v1/produtos/pedido/'.<BR><BR>
 * @pw_complex frete
 */
class Frete{
	/**
	 * ID da transportadora.<BR>Preenchimento Opcional.<BR><BR>Esse campo não é exibido na tela do Pedido de Vendas. <BR>É uma informação interna, utilizada apenas nas APIs.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.<BR><BR>Utilize a tag "codigo_cliente_omie" do método "ListarClientes" da API<BR>http://app.omie.com.br/api/v1/geral/clientes/<BR>para obter essa informação.<BR><BR>OBS: O Omie uitliza o cadastro de clientes para registrar também fornecedores e transportadoras.<BR>
	 *
	 * @var integer
	 */
	public int $codigo_transportadora;
	/**
	 * Código Integração da Transportadora.<BR>Preenchimento Opcional.<BR><BR>Esse campo deve ser informado apenas se você incluiu o cliente (transportadora) via API e informou um código de integração para o cliente. Do contrário, informe sempre a tag "codigo_cliente".<BR>
	 *
	 * @var string
	 */
	public string $codigo_transportadora_integracao;
	/**
	 * Tipo de  Frete.<BR>Preenchimento Obrigatório.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.<BR><BR>Valores disponíveis:<BR><BR>"0" - Contratação do Frete por conta do Remetente (CIF)<BR>"1" - Contratação do Frete por conta do Destinatário (FOB)<BR>"2" - Contratação do Frete por conta de Terceiros<BR>"3" - Transporte Próprio por conta do Remetente<BR>"4" - Transporte Próprio por conta do Destinatário<BR>"9" - Sem frete.<BR>
	 *
	 * @var string
	 */
	public string $modalidade;
	/**
	 * Placa do Veículo.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
	 *
	 * @var string
	 */
	public string $placa;
	/**
	 * Estado da Placa do Veículo.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
	 *
	 * @var string
	 */
	public string $placa_estado;
	/**
	 * RNTRC (ANTT) - Registro Nacional de Transportador de Cargas.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
	 *
	 * @var string
	 */
	public string $registro_transportador;
	/**
	 * Quantidade de Volumes.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
	 *
	 * @var integer
	 */
	public int $quantidade_volumes;
	/**
	 * Espécie dos Volumes.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
	 *
	 * @var string
	 */
	public string $especie_volumes;
	/**
	 * Marca dos Volumes.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
	 *
	 * @var string
	 */
	public string $marca_volumes;
	/**
	 * Numeração dos Volumes.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
	 *
	 * @var string
	 */
	public string $numeracao_volumes;
	/**
	 * Peso Líquido (Kg).<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
	 *
	 * @var decimal
	 */
	public float $peso_liquido;
	/**
	 * Peso Bruto (Kg).<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
	 *
	 * @var decimal
	 */
	public float $peso_bruto;
	/**
	 * Valor do Frete.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
	 *
	 * @var decimal
	 */
	public float $valor_frete;
	/**
	 * Valor do Seguro.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
	 *
	 * @var decimal
	 */
	public float $valor_seguro;
	/**
	 * Número do Lacre.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
	 *
	 * @var string
	 */
	public string $numero_lacre;
	/**
	 * Outras Despesas Acessórias.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
	 *
	 * @var decimal
	 */
	public float $outras_despesas;
	/**
	 * O transporte será realizado com veículo próprio.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
	 *
	 * @var string
	 */
	public string $veiculo_proprio;
	/**
	 * Previsão de entrega do Pedido de Venda<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
	 *
	 * @var string
	 */
	public string $previsao_entrega;
	/**
	 * Código de Rastreio da Entrega do Pedido de Venda.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
	 *
	 * @var string
	 */
	public string $codigo_rastreio;
	/**
	 * Dados do ICMS Retido do Serviço de Transporte.<BR><BR>Informação localizada na Aba "Frete e Outras Despesas" do Pedido de Venda.
	 *
	 * @var Icms_retido
	 */
	public Icms_retido $icms_retido;
	/**
	 * Código do tipo de entrega
	 *
	 * @var integer
	 */
	public int $codigo_tipo_entrega;
	/**
	 * Link de Rastreio da Entrega do Pedido de Venda.<BR>Preenchimento disponível apenas para o método AlterarPedFaturado.<BR><BR>Informação interna pode ser visualizada e consultada via API '/api/v1/produtos/pedido/'.<BR><BR>
	 *
	 * @var string
	 */
	public string $link_rastreio;
}
