<?php

namespace OmieLib\Servicos\Os;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Os\Request\OsListarRequest;
use OmieLib\Servicos\Os\Request\OsObterRequest;
use OmieLib\Servicos\Os\Request\OsStatusRequest;
use OmieLib\Servicos\Os\Request\OsTrocarEtapaRequest;
use OmieLib\Servicos\Os\Response\OsListarResponse;
use OmieLib\Servicos\Os\Response\OsObterResponse;
use OmieLib\Servicos\Os\Response\OsStatusResponse;
use OmieLib\Servicos\Os\Response\OsTrocarEtapaResponse;

/**
 * Lista de Serviços Prestados
 *
 * @pw_element integer $nCodServico Código Interno do Serviço conforme cadastrado na tabela de serviços.<BR><BR>Preenchimento opcional.<BR><BR>Caso preenchido, irá assumir as informações do cadastro de serviço.<BR><BR>Se não for preenchido, assumirá os valores informados na API.<BR><BR>
 * @pw_element string $cCodIntServico Código de Integração do Serviço conforme cadastrado na tabela de serviços.<BR><BR>Preenchimento opcional.<BR><BR>Caso preenchido, irá assumir as informações do cadastro de serviço.<BR><BR>Se não for preenchido, assumirá os valores informados na API.
 * @pw_element string $cTribServ Tipo de Tributação dos Serviços.<BR><BR>Preenchimento obrigatório.<BR><BR>Caso tenha informado a tag "nCodServico" o preenchimento passa a ser opcional e irá assumir o valor informado no cadastro do respectivo serviço.<BR><BR>Valores pode variar de acordo com o município. Verifique a legislação da sua cidade para obter os tipos de tributação disponíveis.
 * @pw_element string $cCodServMun Código do Serviço Municipal ou CNAE.<BR><BR>Preenchimento obrigatório.<BR><BR>Caso tenha informado a tag "nCodServico" o preenchimento passa a ser opcional e irá assumir o valor informado no cadastro do respectivo serviço.<BR><BR>Valores pode variar de acordo com o município. Verifique a legislação da sua cidade para obter os códigos de serviço disponíveis.
 * @pw_element string $cCodServLC116 Código do Serviço conforme Lei Complementar (LC 116).<BR><BR>Preenchimento obrigatório.<BR><BR>Caso tenha informado a tag "nCodServico" o preenchimento passa a ser opcional e irá assumir o valor informado no cadastro do respectivo serviço.<BR><BR>Tabela única para todos os municípios.
 * @pw_element decimal $nQtde Quantidade de serviços.<BR><BR>Preenchimento obrigatório.
 * @pw_element decimal $nValUnit Valor Unitário do serviço.<BR><BR>Preenchimento obrigatório.<BR><BR>Caso tenha informado a tag "nCodServico" o preenchimento passa a ser opcional e irá assumir o valor informado no cadastro do respectivo serviço.
 * @pw_element string $cTpDesconto Tipo de Desconto.<BR><BR>Preenchimento opcional.<BR><BR>Pode ser:<BR>P - Percentual<BR>V - Valor
 * @pw_element decimal $nValorDesconto Valor do Desconto.<BR><BR>Preenchimento opcional.
 * @pw_element decimal $nAliqDesconto Aliquota do Desconto.<BR><BR>Preenchimento opcional.
 * @pw_element decimal $nValorOutrasRetencoes Valor de Outras Retenções.<BR><BR>Preenchimento opcional.<BR><BR>(Disponível apenas para cidades que oferecem esse recurso.)
 * @pw_element decimal $nValorAcrescimos Valor de Acréscimos e taxas.<BR><BR>Preenchimento opcional.<BR><BR>(Disponível apenas para cidades que oferecem esse recurso.)
 * @pw_element string $cDescServ Descrição dos Serviços.<BR><BR>Preenchimento obrigatório.<BR><BR>Caso tenha informado a tag "nCodServico" o preenchimento passa a ser opcional e irá assumir o valor informado no cadastro do respectivo serviço.
 * @pw_element string $cRetemISS Retem ISS (S/N)<BR><BR>Preenchimento opcional.
 * @pw_element string $cDadosAdicItem Dados adicionais do Item.<BR><BR>Preenchimento opcional.
 * @pw_element string $cNbs Código da Nomenclatura Brasileira de Serviços (NBS).<BR><BR>Preenchimento opcional.<BR><BR>Caso tenha informado a tag "nCodServico" irá assumir o valor informado no cadastro do respectivo serviço.
 * @pw_element impostos $impostos Dados do impostos do serviço.<BR><BR>Preenchimento opcional.
 * @pw_element DeducoesIssArray $DeducoesIss Informe aqui as Deduções para o ISS.
 * @pw_element string $cNaoGerarFinanceiro Não gerar conta a receber para este item.<BR><BR>Preenchimento opcional.<BR><BR>Informar "S" para não gerar movimento financeiro.<BR>Informar "N" para gerar movimento financeiro.<BR><BR>
 * @pw_element string $cCodCategItem Código da Categoria.<BR><BR>Preenchimento opcional.
 * @pw_element integer $nSeqItem Sequencia do Item<BR><BR>Preenchimento opcional. (Obrigatório no método AlterarOS)<BR><BR>Deve ser preenchido com uma sequencia de 1 a 199.
 * @pw_element integer $nIdItem ID do Item da Ordem de Serviço.<BR><BR>Não deve ser informado na inclusão.<BR><BR>Pode ser informado na alteração para identificar o item. <BR><BR><BR>
 * @pw_element string $cAcaoItem Ação a ser realizada na alteração do item.<BR><BR>Pode ser:<BR><BR>"A" - Alterar o item (padrão).<BR>"E" - Excluir o item.<BR>"I"  - Incluir o item na alteração.
 * @pw_element viaUnica $viaUnica Informações referente ao serviço de NF modelo 21 ou 22.<BR>
 * @pw_element string $cReembolso Identificação se o item é despesa reembolsável.
 * @pw_element string $cCodigo Código do serviço.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.
 * @pw_complex ServicosPrestados
 */
class ServicosPrestados{
	/**
	 * Código Interno do Serviço conforme cadastrado na tabela de serviços.<BR><BR>Preenchimento opcional.<BR><BR>Caso preenchido, irá assumir as informações do cadastro de serviço.<BR><BR>Se não for preenchido, assumirá os valores informados na API.<BR><BR>
	 *
	 * @var integer
	 */
	public int $nCodServico;
	/**
	 * Código de Integração do Serviço conforme cadastrado na tabela de serviços.<BR><BR>Preenchimento opcional.<BR><BR>Caso preenchido, irá assumir as informações do cadastro de serviço.<BR><BR>Se não for preenchido, assumirá os valores informados na API.
	 *
	 * @var string
	 */
	public string $cCodIntServico;
	/**
	 * Tipo de Tributação dos Serviços.<BR><BR>Preenchimento obrigatório.<BR><BR>Caso tenha informado a tag "nCodServico" o preenchimento passa a ser opcional e irá assumir o valor informado no cadastro do respectivo serviço.<BR><BR>Valores pode variar de acordo com o município. Verifique a legislação da sua cidade para obter os tipos de tributação disponíveis.
	 *
	 * @var string
	 */
	public string $cTribServ;
	/**
	 * Código do Serviço Municipal ou CNAE.<BR><BR>Preenchimento obrigatório.<BR><BR>Caso tenha informado a tag "nCodServico" o preenchimento passa a ser opcional e irá assumir o valor informado no cadastro do respectivo serviço.<BR><BR>Valores pode variar de acordo com o município. Verifique a legislação da sua cidade para obter os códigos de serviço disponíveis.
	 *
	 * @var string
	 */
	public string $cCodServMun;
	/**
	 * Código do Serviço conforme Lei Complementar (LC 116).<BR><BR>Preenchimento obrigatório.<BR><BR>Caso tenha informado a tag "nCodServico" o preenchimento passa a ser opcional e irá assumir o valor informado no cadastro do respectivo serviço.<BR><BR>Tabela única para todos os municípios.
	 *
	 * @var string
	 */
	public string $cCodServLC116;
	/**
	 * Quantidade de serviços.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var decimal
	 */
	public float $nQtde;
	/**
	 * Valor Unitário do serviço.<BR><BR>Preenchimento obrigatório.<BR><BR>Caso tenha informado a tag "nCodServico" o preenchimento passa a ser opcional e irá assumir o valor informado no cadastro do respectivo serviço.
	 *
	 * @var decimal
	 */
	public float $nValUnit;
	/**
	 * Tipo de Desconto.<BR><BR>Preenchimento opcional.<BR><BR>Pode ser:<BR>P - Percentual<BR>V - Valor
	 *
	 * @var string
	 */
	public string $cTpDesconto;
	/**
	 * Valor do Desconto.<BR><BR>Preenchimento opcional.
	 *
	 * @var decimal
	 */
	public float $nValorDesconto;
	/**
	 * Aliquota do Desconto.<BR><BR>Preenchimento opcional.
	 *
	 * @var decimal
	 */
	public float $nAliqDesconto;
	/**
	 * Valor de Outras Retenções.<BR><BR>Preenchimento opcional.<BR><BR>(Disponível apenas para cidades que oferecem esse recurso.)
	 *
	 * @var decimal
	 */
	public float $nValorOutrasRetencoes;
	/**
	 * Valor de Acréscimos e taxas.<BR><BR>Preenchimento opcional.<BR><BR>(Disponível apenas para cidades que oferecem esse recurso.)
	 *
	 * @var decimal
	 */
	public float $nValorAcrescimos;
	/**
	 * Descrição dos Serviços.<BR><BR>Preenchimento obrigatório.<BR><BR>Caso tenha informado a tag "nCodServico" o preenchimento passa a ser opcional e irá assumir o valor informado no cadastro do respectivo serviço.
	 *
	 * @var string
	 */
	public string $cDescServ;
	/**
	 * Retem ISS (S/N)<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $cRetemISS;
	/**
	 * Dados adicionais do Item.<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $cDadosAdicItem;
	/**
	 * Código da Nomenclatura Brasileira de Serviços (NBS).<BR><BR>Preenchimento opcional.<BR><BR>Caso tenha informado a tag "nCodServico" irá assumir o valor informado no cadastro do respectivo serviço.
	 *
	 * @var string
	 */
	public string $cNbs;
	/**
	 * Dados do impostos do serviço.<BR><BR>Preenchimento opcional.
	 *
	 * @var Impostos
	 */
	public Impostos $impostos;
	/**
	 * Informe aqui as Deduções para o ISS.
	 *
	 * @var DeducoesIss[]
	 */
	public array $DeducoesIss;
	/**
	 * Não gerar conta a receber para este item.<BR><BR>Preenchimento opcional.<BR><BR>Informar "S" para não gerar movimento financeiro.<BR>Informar "N" para gerar movimento financeiro.<BR><BR>
	 *
	 * @var string
	 */
	public string $cNaoGerarFinanceiro;
	/**
	 * Código da Categoria.<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $cCodCategItem;
	/**
	 * Sequencia do Item<BR><BR>Preenchimento opcional. (Obrigatório no método AlterarOS)<BR><BR>Deve ser preenchido com uma sequencia de 1 a 199.
	 *
	 * @var integer
	 */
	public int $nSeqItem;
	/**
	 * ID do Item da Ordem de Serviço.<BR><BR>Não deve ser informado na inclusão.<BR><BR>Pode ser informado na alteração para identificar o item. <BR><BR><BR>
	 *
	 * @var integer
	 */
	public int $nIdItem;
	/**
	 * Ação a ser realizada na alteração do item.<BR><BR>Pode ser:<BR><BR>"A" - Alterar o item (padrão).<BR>"E" - Excluir o item.<BR>"I"  - Incluir o item na alteração.
	 *
	 * @var string
	 */
	public string $cAcaoItem;
	/**
	 * Informações referente ao serviço de NF modelo 21 ou 22.<BR>
	 *
	 * @var ViaUnica
	 */
	public ViaUnica $viaUnica;
	/**
	 * Identificação se o item é despesa reembolsável.
	 *
	 * @var string
	 */
	public string $cReembolso;
	/**
	 * Código do serviço.<BR><BR>Não deve ser informado na Inclusão/Alteração. Campo disponível apenas para consulta.
	 *
	 * @var string
	 */
	public string $cCodigo;
}
