<?php

namespace OmieLib\Servicos\Contrato;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Contrato\Request\CsConsultarRequest;
use OmieLib\Servicos\Contrato\Request\CsExcluirItemRequest;
use OmieLib\Servicos\Contrato\Request\CsListarRequest;
use OmieLib\Servicos\Contrato\Response\CsConsultarResponse;
use OmieLib\Servicos\Contrato\Response\CsExcluirItemResponse;
use OmieLib\Servicos\Contrato\Response\CsListarResponse;

/**
 * Cabeçalho do Item
 *
 * @pw_element integer $codItem Identificação do Item do Contrato.<BR><BR>(Gerado automaticamente na Inclusão do item do contrato)
 * @pw_element string $codIntItem Código de integração do item do contrato.<BR><BR>Preenchimento opcional.
 * @pw_element integer $seq Sequência do Item do Contrato.<BR><BR>Preenchimento opcional.
 * @pw_element integer $codServico Código Interno do Serviço conforme cadastrado na tabela de serviços.<BR><BR>Preenchimento opcional.<BR><BR>Caso preenchido, irá assumir as informações do cadastro de serviço.<BR><BR>Se não for preenchido, assumirá os valores informados na API.<BR><BR>
 * @pw_element string $natOperacao Natureza da Operação ou Tipo de Tributação dos Serviços.<BR><BR>Preenchimento obrigatório.<BR><BR>Caso tenha informado a tag "codServico" o preenchimento passa a ser opcional e irá assumir o valor informado no cadastro do respectivo serviço.<BR><BR>Valores pode variar de acordo com o município. Verifique a legislação da sua cidade para obter os tipos de tributação disponíveis.
 * @pw_element string $codServMunic Código do Serviço Municipal ou CNAE.<BR><BR>Preenchimento obrigatório.<BR><BR>Caso tenha informado a tag "codServico" o preenchimento passa a ser opcional e irá assumir o valor informado no cadastro do respectivo serviço.<BR><BR>Valores pode variar de acordo com o município. Verifique a legislação da sua cidade para obter os códigos de serviço disponíveis.
 * @pw_element string $codLC116 Código do Serviço conforme Lei Complementar (LC 116).<BR><BR>Preenchimento obrigatório.<BR><BR>Caso tenha informado a tag "codServico" o preenchimento passa a ser opcional e irá assumir o valor informado no cadastro do respectivo serviço.<BR><BR>Tabela única para todos os municípios.
 * @pw_element decimal $quant Quantidade de serviços.<BR><BR>Preenchimento obrigatório.<BR><BR>Caso tenha informado a tag "codServico" o preenchimento passa a ser opcional e irá assumir o valor padrão 1.
 * @pw_element decimal $valorUnit Valor Unitário do serviço.<BR><BR>Preenchimento obrigatório.<BR><BR>Caso tenha informado a tag "codServico" o preenchimento passa a ser opcional e irá assumir o valor informado no cadastro do respectivo serviço.
 * @pw_element string $cTpDesconto Tipo de Desconto.<BR><BR>Preenchimento opcional.<BR><BR>Pode ser:<BR>P - Percentual<BR>V - Valor
 * @pw_element decimal $valorDesconto Valor do Desconto.<BR><BR>Preenchimento opcional.
 * @pw_element decimal $aliqDesconto Aliquota do Desconto.<BR><BR>Preenchimento opcional.
 * @pw_element decimal $valorOutrasRetencoes Valor de Outras Retenções.<BR><BR>Preenchimento opcional.<BR><BR>(Disponível apenas para cidades que oferecem esse recurso.)
 * @pw_element decimal $valorAcrescimo Valor de Acréscimos e taxas.<BR><BR>Preenchimento opcional.<BR><BR>(Disponível apenas para cidades que oferecem esse recurso.)
 * @pw_element string $codNBS Código da Nomenclatura Brasileira de Serviços (NBS).<BR><BR>Preenchimento opcional.<BR><BR>Caso tenha informado a tag "codServico" irá assumir o valor informado no cadastro do respectivo serviço.
 * @pw_element string $cNaoGerarFinanceiro Não gerar conta a receber para este item.<BR><BR>Preenchimento opcional.<BR><BR>Informar "S" para não gerar movimento financeiro.<BR>Informar "N" para gerar movimento financeiro.<BR><BR>
 * @pw_element string $cCodCategItem Código da Categoria.<BR><BR>Preenchimento Opcional.
 * @pw_element decimal $valorDed Valor de Deduções.<BR><BR>Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração.
 * @pw_element decimal $valorTotal Valor total do item.<BR><BR>Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração.
 * @pw_complex itemCabecalho
 */
class ItemCabecalho{
	/**
	 * Identificação do Item do Contrato.<BR><BR>(Gerado automaticamente na Inclusão do item do contrato)
	 *
	 * @var integer
	 */
	public int $codItem;
	/**
	 * Código de integração do item do contrato.<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $codIntItem;
	/**
	 * Sequência do Item do Contrato.<BR><BR>Preenchimento opcional.
	 *
	 * @var integer
	 */
	public int $seq;
	/**
	 * Código Interno do Serviço conforme cadastrado na tabela de serviços.<BR><BR>Preenchimento opcional.<BR><BR>Caso preenchido, irá assumir as informações do cadastro de serviço.<BR><BR>Se não for preenchido, assumirá os valores informados na API.<BR><BR>
	 *
	 * @var integer
	 */
	public int $codServico;
	/**
	 * Natureza da Operação ou Tipo de Tributação dos Serviços.<BR><BR>Preenchimento obrigatório.<BR><BR>Caso tenha informado a tag "codServico" o preenchimento passa a ser opcional e irá assumir o valor informado no cadastro do respectivo serviço.<BR><BR>Valores pode variar de acordo com o município. Verifique a legislação da sua cidade para obter os tipos de tributação disponíveis.
	 *
	 * @var string
	 */
	public string $natOperacao;
	/**
	 * Código do Serviço Municipal ou CNAE.<BR><BR>Preenchimento obrigatório.<BR><BR>Caso tenha informado a tag "codServico" o preenchimento passa a ser opcional e irá assumir o valor informado no cadastro do respectivo serviço.<BR><BR>Valores pode variar de acordo com o município. Verifique a legislação da sua cidade para obter os códigos de serviço disponíveis.
	 *
	 * @var string
	 */
	public string $codServMunic;
	/**
	 * Código do Serviço conforme Lei Complementar (LC 116).<BR><BR>Preenchimento obrigatório.<BR><BR>Caso tenha informado a tag "codServico" o preenchimento passa a ser opcional e irá assumir o valor informado no cadastro do respectivo serviço.<BR><BR>Tabela única para todos os municípios.
	 *
	 * @var string
	 */
	public string $codLC116;
	/**
	 * Quantidade de serviços.<BR><BR>Preenchimento obrigatório.<BR><BR>Caso tenha informado a tag "codServico" o preenchimento passa a ser opcional e irá assumir o valor padrão 1.
	 *
	 * @var decimal
	 */
	public float $quant;
	/**
	 * Valor Unitário do serviço.<BR><BR>Preenchimento obrigatório.<BR><BR>Caso tenha informado a tag "codServico" o preenchimento passa a ser opcional e irá assumir o valor informado no cadastro do respectivo serviço.
	 *
	 * @var decimal
	 */
	public float $valorUnit;
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
	public float $valorDesconto;
	/**
	 * Aliquota do Desconto.<BR><BR>Preenchimento opcional.
	 *
	 * @var decimal
	 */
	public float $aliqDesconto;
	/**
	 * Valor de Outras Retenções.<BR><BR>Preenchimento opcional.<BR><BR>(Disponível apenas para cidades que oferecem esse recurso.)
	 *
	 * @var decimal
	 */
	public float $valorOutrasRetencoes;
	/**
	 * Valor de Acréscimos e taxas.<BR><BR>Preenchimento opcional.<BR><BR>(Disponível apenas para cidades que oferecem esse recurso.)
	 *
	 * @var decimal
	 */
	public float $valorAcrescimo;
	/**
	 * Código da Nomenclatura Brasileira de Serviços (NBS).<BR><BR>Preenchimento opcional.<BR><BR>Caso tenha informado a tag "codServico" irá assumir o valor informado no cadastro do respectivo serviço.
	 *
	 * @var string
	 */
	public string $codNBS;
	/**
	 * Não gerar conta a receber para este item.<BR><BR>Preenchimento opcional.<BR><BR>Informar "S" para não gerar movimento financeiro.<BR>Informar "N" para gerar movimento financeiro.<BR><BR>
	 *
	 * @var string
	 */
	public string $cNaoGerarFinanceiro;
	/**
	 * Código da Categoria.<BR><BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public string $cCodCategItem;
	/**
	 * Valor de Deduções.<BR><BR>Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração.
	 *
	 * @var decimal
	 */
	public float $valorDed;
	/**
	 * Valor total do item.<BR><BR>Esse campo é calculado automaticamente pelo Omie e não deve ser informado na inclusão/alteração.
	 *
	 * @var decimal
	 */
	public float $valorTotal;
}
